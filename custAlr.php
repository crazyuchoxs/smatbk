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
        function customPrompt(title, message) {
            var containerAlert = document.createElement('div');
            containerAlert.classList.add('container-fluid');
            containerAlert.classList.add('tutup');
            containerAlert.classList.add('bg-dark');
            
            var customPrompt = document.createElement('div');
            customPrompt.classList.add('alert');
            customPrompt.classList.add('alert-danger');
            customPrompt.classList.add('col-3');
            containerAlert.appendChild(customPrompt);
            
            var alertTitle = document.createElement('h2');
            alertTitle.innerHTML = title;
            customPrompt.appendChild(alertTitle);

            var alertMessage = document.createElement('p');
            alertMessage.innerHTML = message;
            customPrompt.appendChild(alertMessage);

            var closeButton = document.createElement('button');
            closeButton.classList.add('btn');
            closeButton.classList.add('btn-danger');
            closeButton.innerHTML = 'Kembali';
            closeButton.addEventListener('click', function() {
                history.go(-1);
            });
            customPrompt.appendChild(closeButton);
            
            var resumeButton = document.createElement('button');
            resumeButton.classList.add('btn');
            resumeButton.classList.add('btn-success');
            resumeButton.innerHTML = 'Lanjutkan';
            resumeButton.addEventListener('click', function() {
                containerAlert.classList.add('invisible');
            });
            customPrompt.appendChild(resumeButton);

            document.body.appendChild(containerAlert);
        }
</script>