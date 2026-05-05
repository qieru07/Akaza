const diamondList = document.getElementById("diamondList");
const nominalInput = document.getElementById("nominalInput");
const metodeInput = document.getElementById("metodeInput");
const totalText = document.getElementById("total");

const data = [
    {diamond: 70, harga: 10000},
    {diamond: 140, harga: 20000},
    {diamond: 355, harga: 50000},
    {diamond: 720, harga: 100000},
];

data.forEach(item => {
    const div = document.createElement("div");
    div.classList.add("diamond-item");

    div.innerHTML = `
        ${item.diamond} Diamonds <br>
        Rp ${item.harga}
    `;

    div.onclick = () => {
        document.querySelectorAll(".diamond-item").forEach(el => el.classList.remove("active"));
        div.classList.add("active");

        nominalInput.value = item.harga;
        totalText.innerText = "Rp " + item.harga;
    };

    diamondList.appendChild(div);
});

// metode bayar
document.getElementById("payment").addEventListener("change", function(){
    metodeInput.value = this.value;
});