function imagePrincipal(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();

             reader.onload = function (e) {
                 $('#visualizar')
                     .attr('src', e.target.result)
                     .width(770)
                     .height(220);
             };

             reader.readAsDataURL(input.files[0]);
         }
}

function mostraUm(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();

             reader.onload = function (e) {
                 $('#mostraU')
                     .attr('src', e.target.result)
                     .width(180)
                     .height(170);
             };

             reader.readAsDataURL(input.files[0]);
         }
}

function mostraDois(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();

             reader.onload = function (e) {
                 $('#mostraD')
                     .attr('src', e.target.result)
                     .width(180)
                     .height(170);
             };

             reader.readAsDataURL(input.files[0]);
         }
}

function readTres(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();

             reader.onload = function (e) {
                 $('#imageTres')
                     .attr('src', e.target.result)
                     .width(180)
                     .height(170);
             };

             reader.readAsDataURL(input.files[0]);
         }
}

function readQuatro(input) {
         if (input.files && input.files[0]) {
             var reader = new FileReader();

             reader.onload = function (e) {
                 $('#imageQuatro')
                     .attr('src', e.target.result)
                     .width(180)
                     .height(170);
             };

             reader.readAsDataURL(input.files[0]);
         }
}
