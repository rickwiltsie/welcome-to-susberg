const NodePolyfillPlugin = require("node-polyfill-webpack-plugin")
const path = require('path');
const Dotenv = require('dotenv-webpack');

module.exports = {
    entry: './src/index.js',
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'dist'),
    },
    plugins: [
        new NodePolyfillPlugin(),
        new Dotenv({
            path: './.env',
            safe: false,
        })
    ],
};