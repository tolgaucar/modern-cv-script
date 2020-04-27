<footer>
    <div class="content has-text-centered has-text-grey">
      
    </div>
</footer>
  </body>
  <script type="text/javascript">
      (function() {
        var burger = document.querySelector('.burger');
        var nav = document.querySelector('#'+burger.dataset.target);
        burger.addEventListener('click', function(){
          burger.classList.toggle('is-active');
          nav.classList.toggle('is-active');
        });
      })();
  </script>
<script type="text/javascript">
  var dropdown = document.querySelector('.dropdown');
  dropdown.addEventListener('click', function(event) {
    event.stopPropagation();
    dropdown.classList.toggle('is-active');
  });
</script>
</html>