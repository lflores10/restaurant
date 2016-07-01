                        <div class="dd">
                           <ol class="dd-list">
                              <li class="dd-item" data-id="1">
                                 <div class="dd-handle">Item 1
                                 </div>
                              </li>
                              <li class="dd-item" data-id="2">
                                 <div class="dd-handle">Item 2</div>
                              </li>
                              <li class="dd-item" data-id="3">
                                 <div class="dd-handle">Item 3</div>
                              </li>
                              <li class="dd-item" data-id="4">
                                 <div class="dd-handle">Item 4</div>
                              </li>
                              <li class="dd-item" data-id="5">
                                 <div class="dd-handle">Item 5</div>
                              </li>
                           </ol>
                        </div>

         <script type="text/javascript">
            var dt;           
            $(document).ready(function() {
               var updateOutput = function(e){
                  var list   = e.length ? e : $(e.target)
                  if (window.JSON) {
                     console.log(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
                  } else {
                     console.log('JSON browser support required for this demo.');
                  }
               };
               $('.dd').nestable().on('change', updateOutput);
            });
         </script>