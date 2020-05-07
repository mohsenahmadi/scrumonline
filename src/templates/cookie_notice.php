<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#007bff",
      "text": "#ffffff"
    },
    "button": {
      "background": "#007bff"
    }
  },
  "content": {
    "href": "<?= $src ?>doc/Cookies.md"
  }
})});
</script>