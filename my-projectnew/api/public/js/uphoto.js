function uploadPhoto() {
    const uploadInput = document.getElementById('upload-input');
    uploadInput.click();

    uploadInput.addEventListener('change', function() {
        const file = uploadInput.files[0];
        const formData = new FormData();
        formData.append('photo', file);

        // Send the photo data to the server using axios
        axios.post('/upload-photo', formData)
            .then(response => {
                const newPhotoUrl = response.data.path;
                const profileImage = document.getElementById('profile-image');
                profileImage.src = newPhotoUrl;

                // Update the user's photo in the database
                axios.post('/update-user-photo', { photo: newPhotoUrl })
                    .then(response => {
                        // Photo successfully saved in the user's profile
                    })
                    .catch(error => {
                        // Handle error if updating the user's photo fails
                    });
            })
            .catch(error => {
                // Handle error if uploading the photo fails
            });
    });
}

function deletePhoto() {
    const profileImage = document.getElementById('profile-image');
    profileImage.src = 'avatar(1).png';

    // Update the user's photo in the database
    axios.post('/update-user-photo', { photo: '' })
        .then(response => {
            // Photo successfully deleted from the user's profile
        })
        .catch(error => {
            // Handle error if updating the user's photo fails
        });
}

function savePhoto() {
    const profileImage = document.getElementById('profile-image');
    const photoUrl = profileImage.src;
  
    // Kirim permintaan Ajax ke endpoint untuk menyimpan foto profil
    axios.post('/update-user-photo', { photo: photoUrl })
      .then(response => {
        // Tindakan yang diperlukan setelah berhasil menyimpan foto profil
        console.log('Foto profil berhasil disimpan.');
      })
      .catch(error => {
        // Tindakan yang diperlukan jika terjadi kesalahan saat menyimpan foto profil
        console.error('Terjadi kesalahan saat menyimpan foto profil.', error);
      });
  }
  