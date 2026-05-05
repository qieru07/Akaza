// =======================================
// DATA DIAMOND
// =======================================
const diamondOptions = [
    { id: 1, nama: "86 Diamonds", harga: 20000 },
    { id: 2, nama: "172 Diamonds", harga: 38000 },
    { id: 3, nama: "257 Diamonds", harga: 56000 },
    { id: 4, nama: "344 Diamonds", harga: 74000 },
    { id: 5, nama: "429 Diamonds", harga: 92000 },
    { id: 6, nama: "514 Diamonds", harga: 110000 },
];

const diamondList = document.getElementById("diamondList");
const total = document.getElementById("total");

const nominalInput = document.getElementById("nominalInput");
const metodeInput = document.getElementById("metodeInput");

let selectedDiamond = null;

// =======================================
// RENDER DIAMOND
// =======================================
diamondOptions.forEach(item => {
    const div = document.createElement("div");
    div.className = "diamond-item";
    div.innerHTML = `${item.nama}<br><b>Rp ${item.harga.toLocaleString()}</b>`;
    
    div.onclick = () => {
        document.querySelectorAll(".diamond-item").forEach(el => el.classList.remove("active"));
        div.classList.add("active");

        selectedDiamond = item;
        total.innerText = "Rp " + item.harga.toLocaleString();

        // 🔥 MASUKIN KE HIDDEN INPUT
        nominalInput.value = item.harga;
    };

    diamondList.appendChild(div);
});

// =======================================
// PILIH METODE
// =======================================
document.getElementById("payment").addEventListener("change", function() {
    metodeInput.value = this.value;
});

// =======================================
// VALIDASI SEBELUM SUBMIT
// =======================================
document.querySelector("form").addEventListener("submit", function(e) {
    const uid = document.getElementById("userid").value;
    const server = document.getElementById("server").value;
    const payment = document.getElementById("payment").value;

    if (!uid || !server || !selectedDiamond || !payment) {
        alert("Lengkapi semua data!");
        e.preventDefault();
    }
});