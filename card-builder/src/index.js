var Api2Pdf = require('api2pdf');
var a2pClient = new Api2Pdf('483d39a6-1b85-47d2-afec-8824d6402c8d');

import JSZip from 'jszip';
import { saveAs } from 'file-saver';
import * as JSZipUtils from 'jszip-utils';

window.onload = (event) => {
    document.getElementById('test-button').addEventListener("click", testButton);
};

var cards = [];
var enemies = [];

let styles = {
    a: ['athlete','pattern-diagonal-stripes-md'],
    m: ['musician','pattern-zigzag-md'],
    r: ['artist','pattern-triangles-md'],
    i: ['inventor','pattern-checks-md'],
}

// 1. Load the JavaScript client library.
gapi.load('client', start);

function start()
{
  // 2. Initialize the JavaScript client library.
  gapi.client.init({
    'apiKey': process.env.API_KEY,
    'clientId': process.env.CLIENT_ID,
    'discoveryDocs': ['https://sheets.googleapis.com/$discovery/rest?version=v4'],
    'scope': 'https://www.googleapis.com/auth/spreadsheets.readonly',
  }).then(function() {



    // 3. Initialize and make the API request.
    return gapi.client.sheets.spreadsheets.get({
      'spreadsheetId': process.env.SPREADSHEET_ID,
      'includeGridData': true
    });



  }).then(function(response) {


    console.log(response);


    setCardData(response.result)

    showCards();

    showEnemies();

  }, function(reason) {
    console.log(reason);
    console.log('Error: ' + reason.result.error.message);
  });
};

function setCardData(spreadsheet)
{

  for(var iSheet in spreadsheet.sheets) {
    var sheet = spreadsheet.sheets[iSheet];
    var sheetName = sheet.properties.title;


      console.log(sheet);
      console.log(sheetName);

    // skip the template sheet
    if (sheetName == 'v1-cards') {
        storeCards(sheet.data[0].rowData);

    } else if (sheetName == 'v1-enemies') {
        storeEnemies(sheet.data[0].rowData);
    }


  }
}









function storeCards(rowData) {
    for(var iCard in rowData) {

        // skip first row for headers
        if (iCard == 0) {
            continue;
        }

        // set the card data
        var card = rowData[iCard];

        let fin = card.values[1].formattedValue;


        if (fin > 0) {
            var storeCard = {
                key: card.values[0].formattedValue,
                count: card.values[1].formattedValue,
                art: card.values[3].formattedValue ?? '',
                name: card.values[2].formattedValue ?? '',
                cost: card.values[5].formattedValue ?? null,
                rule1: card.values[6].formattedValue ?? null,
                conjunction: card.values[7].formattedValue ?? null,
                rule2: card.values[8].formattedValue ?? null,
            }

            cards.push(storeCard);
        }
    }
}

function storeEnemies(rowData) {
    for(var iCard in rowData) {

        // skip first row for headers
        if (iCard == 0) {
            continue;
        }

        // set the card data
        var card = rowData[iCard];

        if (Object.keys(card).length == 0) {
            continue;
        }

        let fin = card.values[0].formattedValue;

        if (fin > 0) {
            var storeCard = {
                name: card.values[1].formattedValue ?? '',
                art: card.values[2].formattedValue ?? '',
                level: card.values[3].formattedValue ?? null,
                power: card.values[4].formattedValue ?? null,
                health: card.values[5].formattedValue ?? null,
                rule: card.values[6].formattedValue ?? null,
                reward: card.values[7].formattedValue ?? null,
            }

            enemies.push(storeCard);
        }
    }
}





function showCards()
{
    var visibleCards = [];

    visibleCards = cards;

    let mainGrid = document.getElementById('cards-grid');

    for (var i in visibleCards) {
        var card = visibleCards[i];

        var newItem = mainGrid.querySelector('.clone-source').cloneNode(true);
        newItem.classList.remove('clone-source');

        let newCard = newItem.querySelector('.card');

        newCard.setAttribute('key', card.key);
        newCard.setAttribute('count', card.count);

        let style = styles[card.key.toLowerCase()];
        if (style == null) {
            continue;
        }

        newCard.classList.add(style[0]);
        newCard.classList.add(style[1]);

        newCard.querySelector('div[name]').setAttribute('name', card.name);

        if (card.cost) {
            newCard.querySelector('div[cost]').setAttribute('cost', card.cost);
        } else {
            newCard.querySelector('div[cost]').remove();
        }

        if (card.art) {
            let url = './art/'+card.art+'.png';
            getBase64Image(url, function(base64image){
                newCard.querySelector('div.image img').setAttribute('src', base64image);
            });
        } else {
            newCard.querySelector('div.image img').remove();
        }

        if (card.rule1) {
            newCard.querySelector('div.rule1').innerHTML = transformRules(card.rule1);
        } else {
            newCard.querySelector('div.rule1').remove();
        }

        if (!card.conjunction && !card.rule2) {
            newCard.querySelector('div[conjunction]').remove();
        } else {
            newCard.querySelector('div[conjunction]').setAttribute('conjunction', card.conjunction ?? '');
        }

        if (card.rule2) {
            newCard.querySelector('div.rule2').innerHTML = transformRules(card.rule2);
        } else {
            newCard.querySelector('div.rule2').remove();
        }

        mainGrid.appendChild(newItem);
    }
}



function showEnemies()
{
    var visibleCards = [];

    visibleCards = enemies;

    let mainGrid = document.getElementById('enemies-grid');
    console.log(mainGrid);

    for (var i in visibleCards) {
        var card = visibleCards[i];

        var newItem = mainGrid.querySelector('.clone-source').cloneNode(true);
        newItem.classList.remove('clone-source');

        let newCard = newItem.querySelector('.card');

        newCard.querySelector('div[name]').setAttribute('name', card.name);

        if (card.power) {
            newCard.querySelector('div[power]').setAttribute('power', card.power);
        } else {
            newCard.querySelector('div[power]').remove();
        }
        if (card.health) {
            newCard.querySelector('div[health]').setAttribute('health', card.health);
        } else {
            newCard.querySelector('div[health]').remove();
        }


        if (card.art) {
            let url = './monster/'+card.art+'.png';
            getBase64Image(url, function(base64image){
                newCard.querySelector('div.image img').setAttribute('src', base64image);
            });
        } else {
            newCard.querySelector('div.image img').remove();
        }


        if (card.rule) {
            newCard.querySelector('div.rule').innerHTML = transformRules(card.rule);
        } else {
            newCard.querySelector('div.rule').remove();
        }

        if (card.reward) {
            newCard.querySelector('div.reward').innerHTML = transformRules(card.reward, true);
        } else {
            newCard.querySelector('div.reward').remove();
        }

        if (card.level) {
            newCard.querySelector('div[level]').setAttribute('level', card.level);
        } else {
            newCard.querySelector('div.[level]').remove();
        }

        mainGrid.appendChild(newItem);
    }
}



function transformRules(rules, isReward = false) {

    let stats = ['PWR', 'BLK', 'LCK', 'MSC'];

    for (var i in stats) {
        let stat = stats[i];

        for (i=3;i>=1;i--) {
            let searchString = [];
            for(let x=1;x<=i;x++) {
                searchString.push(stat);
            }
            searchString = searchString.join(' ');

            let replace = [];

            if (isReward) {
                replace.push('<span stat="'+stat.toLowerCase()+'">');
            } else if (rules.toLowerCase() == searchString.toLowerCase()) {
                replace.push('<div stat="'+stat.toLowerCase()+'">');
            }  else {
                replace.push('<span stat="'+stat.toLowerCase()+'">');
            }


            for(let x=1;x<=i;x++) {
                replace.push('<span></span>');
            }

            if (rules.toLowerCase() == searchString.toLowerCase()) {
                replace.push('</div>');
            }  else {
                replace.push('</span>');
            }

            if (isReward) {
                replace = replace.join('');
            } else {
                replace = replace.join(' ');
            }

            rules = rules.replaceAll(searchString, replace);

        }
    }

    rules = rules.replaceAll('+', '<br>');


    return rules;
}




function getBase64Image(imgUrl, callback) {

    var img = new Image();

    // onload fires when the image is fully loadded, and has width and height

    img.onload = function(){

        var canvas = document.createElement("canvas");
        canvas.width = img.width;
        canvas.height = img.height;
        var ctx = canvas.getContext("2d");
        ctx.drawImage(img, 0, 0);
        var dataURL = canvas.toDataURL("image/png");

        callback(dataURL); // the base64 string

    };

    // set attributes and src
    img.setAttribute('crossOrigin', 'anonymous'); //
    img.src = imgUrl;

}


let cardCount = 0;
let cardsLoaded = 0;
let zip = new JSZip();
let fileNames = [];

function testButton() {
    cardCount = 0;
    cardsLoaded = 0;
    zip = new JSZip();
    fileNames = [];

    let cards = [
        ...document.querySelectorAll('#cards-grid li:not(.clone-source) .card'),
        ...document.querySelectorAll('#enemies-grid li:not(.clone-source) .card')
    ];

    //cards = cards.slice(0, 3);

    cardCount = cards.length;


    for (let i in cards) {
        let cardElement = cards[i];


        let config = {
            filename: 'test.png',
            options: {
                delay: 0,
                puppeteerWaitForMethod: "WaitForNavigation",
                puppeteerWaitForValue: "Load",
                fullPage: false,
                viewPortOptions: {
                    width: 240 * 3,
                    height: 336 * 3,
                    deviceScaleFactor: 2
                }
            }
        };

        cardElement.classList.add('api2pdf');

        let fileName = '';

        if (cardElement.classList.contains('enemy')) {
            fileName = 'enemy';
            let key = 'Enemy'
            let level = cardElement.querySelector('*[level]')
                ?.getAttribute('level') ?? 0;
            let name = cardElement.querySelector('*[name]')
                .getAttribute('name')
                .toLowerCase()
                .replaceAll(' ', '-')
                .replaceAll('\'', '');
            fileName = key+'_'+level+'_'+name+'.png';

        } else {
            let key = cardElement.getAttribute('key') ?? '_';
            let cost = cardElement.querySelector('*[cost]')
                ?.getAttribute('cost') ?? 0;
            if (cost == 'S') {
                cost += cardElement.getAttribute('count');
            }
            let name = cardElement.querySelector('*[name]')
                .getAttribute('name')
                .toLowerCase()
                .replaceAll(' ', '-')
                .replaceAll('\'', '');
            fileName = key+'_'+cost+'_'+name+'.png';
        }

        fileNames.push(fileName);

        a2pClient.chromeHtmlToImage(cardElement.outerHTML, config)
        .then(function (result) {

                zip.file(fileName, urlToPromise(result.FileUrl), {binary: true})

            }, function (rejected) {
                console.log(rejected); //an error occurred
            }
        ).then(function() {
            checkSave();
        });
        cardElement.classList.remove('api2pdf');
    }




}

function checkSave() {
    cardsLoaded++;

    console.log(cardsLoaded+'/'+cardCount);



    if (cardsLoaded == cardCount) {

        // include filename file
        console.log(fileNames);
        let json = JSON.stringify(fileNames);
        var blob = new Blob([json], {
            type: "text/plain;charset=utf-8"
        });
        saveAs(blob, "_fileNames.json");


        zip.generateAsync({type: "blob"})
            .then(function callback(blob) {
                console.log('saveAs');
                // see FileSaver.js
                saveAs(blob, "cards.zip");
            });


    }
}


function urlToPromise(url) {
    return new Promise(function(resolve, reject) {
        JSZipUtils.getBinaryContent(url, function (err, data) {
            if(err) {
                reject(err);
            } else {
                resolve(data);
            }
        });
    });
}