<!--Footer-->
    <footer class="page-footer orange">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">API de dados</h5>
                <p class="grey-text text-lighten-4">A API utilizada pode ser obtida clicando <a href="#!">aqui</a>.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <h5 class="white-text">Equipe</h5>
                <ul>
                  <li>Felipe Alves</li>
                  <li>Kelly Souza</li>
                  <li>Leonardo</li>
                  <li>Luiz Felipe Ribeiro</li>
                  <li>Theodora Faria</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
            © 2018 Copyright Text
            </div>
          </div>
        </footer>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="../js/materialize.js"></script>
      <script type="text/javascript">
        $(document).ready(function(){
          $('.carousel').carousel();
        });
      </script>
      <script type="text/javascript">
        $('input.autocomplete').autocomplete({
          data: {
            "Apple": null,
            "Microsoft": null,
            "Google": 'https://placehold.it/250x250'
          },
          limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
          onAutocomplete: function(val) {
            // Callback function when value is autcompleted.
          },
          minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
        });
      </script>
  </div>
  </body>


</html>