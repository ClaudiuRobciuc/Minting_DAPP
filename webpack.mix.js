require('dotenv').config();
const mix = require('laravel-mix');
let webpack = require('webpack');
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */
mix.options({legacyNodePolyfills: false})

let dotenvplugin = new webpack.DefinePlugin({
  'process.env': {
      APP_NAME: JSON.stringify(process.env.APP_NAME || 'Default app name'),
      NODE_ENV: JSON.stringify(process.env.NODE_ENV || 'development')
  }
});

let bufferplugin = new webpack.ProvidePlugin({
  process: 'process/browser',
  Buffer: ['buffer', 'Buffer'],
});

mix.webpackConfig({ 
  plugins: [
    dotenvplugin,
    bufferplugin
  ],
  resolve: { 
    alias: {
      process: 'process/browser',
      stream: "stream-browserify",
      zlib: "browserify-zlib"
    },
    fallback: {
      http: require.resolve("stream-http"),
      https: require.resolve("https-browserify"),
      crypto: require.resolve("crypto-browserify"),
      stream: require.resolve("stream-browserify"),
      os: require.resolve("os-browserify/browser"),
      url: require.resolve("url"),
      assert: require.resolve("assert"),
    }, 
  }, 
});

mix.js('resources/js/app.js', 'public/js')
    .copy('resources/js/components/mintDapp/config/settings/config.json', 'public/js/mintDapp/config/settings/config.json')
    .copy('resources/js/components/mintDapp/config/settings/abi.json', 'public/js/mintDapp/config/settings/abi.json')
    .react()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);