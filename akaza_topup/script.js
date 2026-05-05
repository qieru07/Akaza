// smooth nav anchor (if any)
document.querySelectorAll('a[href^="#"]').forEach(a=>{
  a.addEventListener('click', e=>{
    e.preventDefault();
    const t = document.querySelector(a.getAttribute('href'));
    if(t) t.scrollIntoView({behavior:'smooth', block:'start'});
  });
});

// Customer service button -> open WhatsApp (ubah nomor sesuai kebutuhan)
document.getElementById('csBtn').addEventListener('click', ()=>{
  const url = 'https://wa.me/6282297702711?text=Halo%20CS%20GameTop,%20saya%20mau%20tanya%20...';
  window.open(url, '_blank');
});

// Basic search filter (filter product cards by title)
const search = document.getElementById('search');
if(search){
  search.addEventListener('input', (e)=>{
    const q = e.target.value.toLowerCase().trim();
    document.querySelectorAll('#productGrid .prod-card').forEach(card=>{
      const title = card.querySelector('.prod-body h3').innerText.toLowerCase();
      card.style.display = title.includes(q) ? '' : 'none';
    });
  });
}

document.addEventListener("DOMContentLoaded", () => {
    const user = JSON.parse(localStorage.getItem("akaza_user"));
    const loggedIn = localStorage.getItem("akaza_loggedIn") === "true";

    const loginBtn = document.getElementById("loginBtn");
    const registerBtn = document.getElementById("registerBtn");
    const userDisplay = document.getElementById("userDisplay");

    if (user && loggedIn) {
        loginBtn.remove();
        registerBtn.remove();

        userDisplay.innerHTML = `
            <span>👤 ${user.username}</span>
            <button id="logoutBtn">Keluar</button>
        `;

        document.getElementById("logoutBtn").addEventListener("click", () => {
            localStorage.setItem("akaza_loggedIn", "false");
            window.location.reload();
        });
    }
});




// Accessibility: enable Enter to activate product
document.addEventListener('keydown', e=>{
  if(e.key === 'Enter' && document.activeElement.classList.contains('prod-card')){
    document.activeElement.click();
  }
});

// demo click on product (replace with modal/page)
document.querySelectorAll('.prod-card').forEach(c=>{
  c.addEventListener('click', ()=>{
    const title = c.querySelector('.prod-body h3').innerText;
    alert(`Kamu klik: ${title}\nImplementasikan modal atau halaman produk untuk detail lebih lanjut.`);
  });
});
