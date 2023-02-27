<script>
    function customAlert(title, message) {
            var containerAlert = document.createElement('div');
            containerAlert.classList.add('container-fluid');
            containerAlert.classList.add('tutup');
            containerAlert.classList.add('bg-dark');
            
            var customAlert = document.createElement('div');
            customAlert.classList.add('alert');
            customAlert.classList.add('alert-danger');
            customAlert.classList.add('col-3');
            containerAlert.appendChild(customAlert);
            
            var alertTitle = document.createElement('h2');
            alertTitle.innerHTML = title;
            customAlert.appendChild(alertTitle);

            var alertMessage = document.createElement('p');
            alertMessage.innerHTML = message;
            customAlert.appendChild(alertMessage);

            var closeButton = document.createElement('button');
            closeButton.classList.add('btn');
            closeButton.classList.add('btn-danger');
            closeButton.innerHTML = 'Kembali';
            closeButton.addEventListener('click', function() {
                history.go(-1);
            });
            customAlert.appendChild(closeButton);

            document.body.appendChild(containerAlert);
        }
</script>