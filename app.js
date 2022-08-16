
const firebaseKey = '6LdrCGUhAAAAAMjcnina0bHg4tEttexgtlgj1tcE';
const localKey = '6Lfr1mQhAAAAAI4kRKYeCtY8QfmtznPpi6eiUgqm';

var onloadCallback = function() {
  let form = document.querySelector('form');
  form.addEventListener('submit', function (e){
    e.preventDefault();
    grecaptcha.render('recap', {
      'sitekey' : '6LchfX4hAAAAAEGeZufbMRmqVz0rB1_EcEduDfb2',
      'callback': ((token) => { 
        console.log(token);
        form.submit();
      })
    });
  });
};

// function submitForm(e) {
//   e.preventDefault();
//   grecaptcha.ready(function()  {
//     // grecaptcha.execute(localKey, {action: 'login'}).then(function(token) {
//     //     // Add your logic to submit to your backend server here.
//     //     document.querySelector("#g-recap").value = token;
//     //     let form = document.querySelector('form');
//     //     form.submit();
//     // });
//   });
// }


// document.querySelector(".submit").addEventListener("click", function (){  console.log("fuck")});
