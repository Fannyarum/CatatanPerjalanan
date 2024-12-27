document.getElementById('logoutBtn').addEventListener('click', function() {
  document.getElementById('logoutModal').classList.add('active');
});

function closeModal() {
  document.getElementById('logoutModal').classList.remove('active');
}

function logout() {
  alert('Kamu berhasil Keluar');
  window.location.href = '/logout'; 
}

