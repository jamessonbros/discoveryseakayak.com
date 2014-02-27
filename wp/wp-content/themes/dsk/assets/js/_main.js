// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
  // All pages
  common: {
    init: function() {
      // JS here
    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
      // JS here
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  },
  // FAQs page
  faqs: {
    init: function() {
      var faqs = $('.faq');
      if (faqs.length) {
        faqs.each(function(i, el) {
          var q = $(el).find('.faq-question'),
              a = $(el).find('.faq-answer'),
              id = $(el).data('faq-id');

          q.find('.question-text').wrap('<a href="#faq-'+id+'">');
          a.hide();
          q.on('click', function(e) {
            e.preventDefault();
            a.toggle('fast', function() {});
          });
        });
      }
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ExampleSite;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);
