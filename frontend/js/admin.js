// refresh

const actions = [
  "post_matcha",
  "post_cappuccino",
  "post_espresso",
  "post_mocha",
  "post_thai",
];

function handleActions() {
  const urlParams = new URLSearchParams(window.location.search);
  actions.forEach((action) => {
    if (urlParams.has("action") && urlParams.get("action") === action) {
      if (
        action === "post_matcha" ||
        action === "post_cappuccino" ||
        action === "post_espresso" ||
        action === "post_mocha" ||
        action === "post_thai"
      ) {
        setTimeout(() => {
          window.location.href = window.location.pathname;
        }, 1000);
      }
    }
  });
}

function fetchTransactions() {
  fetch("../backend/crud.php?check_new_transactions=true")
    .then((response) => response.json())
    .then((data) => {
      // Update the table with new transactions
      const tableBody = document.querySelector(".tbl-transaksi tbody");
      tableBody.innerHTML = "";
      data.forEach((transaction, index) => {
        const row = document.createElement("tr");
        row.innerHTML = `
                    <td class="tbl-item">${index + 1}</td>
                    <td class="tbl-item">${transaction.date_transaksi}</td>
                    <td class="tbl-item">${transaction.no_meja}</td>
                    <td class="tbl-item">${transaction.nama_product}</td>
                    <td class="tbl-item">${transaction.harga_product}</td>
                    <td class="tbl-item">
                        <form action="../backend/crud.php" method="POST">
                            <input type="hidden" name="no_meja" value="${
                              transaction.no_meja
                            }">
                            <button class="btn btn-danger" name="delete_transaksi" type="submit">Delete</button>
                        </form>
                    </td>
                `;
        tableBody.appendChild(row);
      });
    });
}

setInterval(fetchTransactions, 5000);

fetchTransactions();

window.onload = handleActions;
