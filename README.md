# EEL Helper to use the NodeSearchService

Usage
-----

    items = ${NodeSearchService.findByProperties('query', ['Neos.Neos:Document'], node.context)}
    
    items = ${NodeSearchService.findByProperty('propertyName', 'propertyValue', ['Neos.Neos:Document'], node.context)}
    
Acknowledgments
---------------

Development sponsored by [ttree ltd - neos solution provider](http://ttree.ch).

We try our best to craft this package with a lots of love, we are open to
sponsoring, support request, ... just contact us.

License
-------

Licensed under MIT, see [LICENSE](LICENSE)
