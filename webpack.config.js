const path = require('path');

module.exports = {
  mode: 'development',
  entry: './assets/js/src/index.js',
  output: {
    path: path.resolve(__dirname, 'assets/js/dist'),
    filename: 'bundle.js',
    library: {
      type: 'self'
    }
  },
  module: {
    rules: [
      {
        test: /\.[jt]sx?$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
        options: {
          presets: [
            ['@babel/preset-env', { 'modules': 'umd' }],
            ['@babel/preset-react', { 'runtime': 'automatic' }]
          ],
          cacheDirectory: true
        }
      },
      {
        test: /\.css$/,
        use: ['style-loader', 'css-loader']
      }
    ]
  },
  resolve: {
    extensions: ['.js', '.jsx']
  }
};