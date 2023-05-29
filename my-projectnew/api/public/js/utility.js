 const fotoKTPInput = document.getElementById('fotoKTP');
  const ambilFotoButton = document.getElementById('ambilFotoButton');

  ambilFotoButton.addEventListener('click', () => {
    // Membuka aplikasi kamera perangkat jika tersedia
    if (navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
      navigator.mediaDevices.getUserMedia({ video: true })
        .then((stream) => {
          // Menutup pemutaran video untuk menghemat daya baterai
          const video = document.createElement('video');
          video.srcObject = stream;
          video.autoplay = true;

          // Menghentikan akses kamera dan mengambil foto saat video telah dimuat
          video.addEventListener('loadeddata', () => {
            stream.getTracks().forEach((track) => track.stop());

            const canvas = document.createElement('canvas');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            const context = canvas.getContext('2d');
            context.drawImage(video, 0, 0, canvas.width, canvas.height);

            canvas.toBlob((blob) => {
              const file = new File([blob], 'foto.jpg', { type: 'image/jpeg' });
              fotoKTPInput.files = [file];
            }, 'image/jpeg', 1);
          });
        })
        .catch((error) => {
          console.log('Error: Tidak dapat mengakses kamera', error);
        });
    } else {
      // Jika tidak ada akses kamera, memicu input file untuk memilih foto dari galeri
      fotoKTPInput.click();
    }
  });


const provinsiSelect = document.getElementById('provinsi');
  const kotaSelect = document.getElementById('kota');
  const kecamatanSelect = document.getElementById('kecamatan');
  const kelurahanSelect = document.getElementById('kelurahan');
  const formKotaWrapper = document.getElementById('formKotaWrapper');
  const formKecamatanWrapper = document.getElementById('formKecamatanWrapper');
  const formKelurahanWrapper = document.getElementById('formKelurahanWrapper');
  
  // Mengisi opsi provinsi
  fetch('assets/utility-prov/static/api/provinces.json')
    .then(response => response.json())
    .then(provinces => {
      provinces.forEach(provinsi => {
        const option = document.createElement('option');
        option.value = provinsi.id;
        option.textContent = provinsi.name;
        provinsiSelect.appendChild(option);
      });
    })
    .catch(error => {
      console.log('Error: Tidak dapat mengambil data provinsi', error);
    });
  
  // Event listener untuk memunculkan form kota ketika provinsi dipilih
  provinsiSelect.addEventListener('change', () => {
    const selectedProvinsiId = provinsiSelect.value;
  
    // Menghapus opsi kota, kecamatan, dan kelurahan sebelumnya
    kotaSelect.innerHTML = '<option value="">Pilih Kota</option>';
    kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
    kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';
  
    if (selectedProvinsiId) {
      // Mengisi opsi kota berdasarkan provinsi terpilih
      fetch(`assets/utility-prov/static/api/regencies/${selectedProvinsiId}.json`)
        .then(response => response.json())
        .then(regencies => {
          regencies.forEach(kota => {
            const option = document.createElement('option');
            option.value = kota.id;
            option.textContent = kota.name;
            kotaSelect.appendChild(option);
          });
  
          formKotaWrapper.style.display = 'block';
        })
        .catch(error => {
          console.log('Error: Tidak dapat mengambil data kota', error);
        });
    } else {
      formKotaWrapper.style.display = 'none';
      formKecamatanWrapper.style.display = 'none';
      formKelurahanWrapper.style.display = 'none';
    }
  });
  
  // Event listener untuk memunculkan form kecamatan ketika kota dipilih
  kotaSelect.addEventListener('change', () => {
    const selectedKotaId = kotaSelect.value;
  
    // Menghapus opsi kecamatan dan kelurahan sebelumnya
    kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
    kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';
  
    if (selectedKotaId) {
      // Mengisi opsi kecamatan berdasarkan kota terpilih
      fetch(`assets/utility-prov/static/api/districts/${selectedKotaId}.json`)
        .then(response => response.json())
        .then(districts => {
          districts.forEach(kecamatan => {
            const option = document.createElement('option');
            option.value = kecamatan.id;
            option.textContent = kecamatan.name;
            kecamatanSelect.appendChild(option);
          });
  
          formKecamatanWrapper.style.display = 'block';
        })
        .catch(error => {
          console.log('Error: Tidak dapat mengambil data kecamatan', error);
        });
    } else {
      formKecamatanWrapper.style.display = 'none';
      formKelurahanWrapper.style.display = 'none';
    }
});
// Event listener untuk memunculkan form kelurahan ketika kecamatan dipilih
kecamatanSelect.addEventListener('change', () => {
    const selectedKecamatanId = kecamatanSelect.value;
  
    // Menghapus opsi kelurahan sebelumnya
    kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';
  
    if (selectedKecamatanId) {
      // Mengisi opsi kelurahan berdasarkan kecamatan terpilih
      fetch(`assets/utility-prov/static/api/villages/${selectedKecamatanId}.json`)
        .then(response => response.json())
        .then(villages => {
          villages.forEach(kelurahan => {
            const option = document.createElement('option');
            option.value = kelurahan.id;
            option.textContent = kelurahan.name;
            kelurahanSelect.appendChild(option);
          });
  
          formKelurahanWrapper.style.display = 'block';
        })
        .catch(error => {
          console.log('Error: Tidak dapat mengambil data kelurahan', error);
        });
    } else {
      formKelurahanWrapper.style.display = 'none';
    }
  });
    