const {alias} = require('react-app-rewire-alias')

module.exports = function override(config) {
    alias({
        'components': 'src/components',
        'assets' : 'src/assets',
        'pages' : 'src/pages',
        'utils' : 'src/utils',
        'pageList' : 'src/components/pageList',
    })(config)
    
    return config
}
