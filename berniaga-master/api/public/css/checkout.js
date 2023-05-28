// JavaScript
const filterItems = document.querySelectorAll(".filter-item");
const transactionTable = document.querySelector(".transaction-table tbody");
const resetButton = document.getElementById("reset-button");

// Handle filter item click
filterItems.forEach((item) => {
  item.addEventListener("click", () => {
    filterItems.forEach((item) => item.classList.remove("active"));
    item.classList.add("active");
    const status = item.getAttribute("data-status");
    updateTransactionTable(status);
  });
});

// Handle reset button click
resetButton.addEventListener("click", () => {
  filterItems.forEach((item) => item.classList.remove("active"));
  document.getElementById("po-name").value = "";
  document.getElementById("start-date").value = "";
  document.getElementById("end-date").value = "";
  updateTransactionTable("all");
});

// Function to update the transaction table based on the selected status
function updateTransactionTable(status) {
  const transactions = fetchData(status);
  renderTransactionRows(transactions);
}

// Function to render the transaction table rows
function renderTransactionRows(transactions) {
  transactionTable.innerHTML = "";

  if (transactions.length === 0) {
    const row = document.createElement("tr");
    const cell = document.createElement("td");
    cell.setAttribute("colspan", "4");
    cell.textContent = "Data tidak ditemukan.";
    row.appendChild(cell);
    transactionTable.appendChild(row);
  } else {
    transactions.forEach((transaction) => {
      const row = document.createElement("tr");
      const productCell = document.createElement("td");
      productCell.textContent = transaction.product;
      row.appendChild(productCell);

      const orderCell = document.createElement("td");
      orderCell.textContent = transaction.order;
      row.appendChild(orderCell);

      const totalCell = document.createElement("td");
      totalCell.textContent = transaction.total;
      row.appendChild(totalCell);

      const statusCell = document.createElement("td");
      statusCell.textContent = transaction.status;
      row.appendChild(statusCell);

      transactionTable.appendChild(row);
    });
  }
}

// Function to fetch data based on the selected status
function fetchData(status) {
  const data = [
    {
      product: "Product 1",
      order: "Order 1",
      total: "$100.00",
      status: "Processed",
    },
    {
      product: "Product 2",
      order: "Order 2",
      total: "$150.00",
      status: "Payment",
    },
    {
      product: "Product 3",
      order: "Order 3",
      total: "$200.00",
      status: "Completed",
    },
  ];

  if (status === "all") {
    return data;
  } else {
    return data.filter(
      (transaction) => transaction.status.toLowerCase() === status
    );
  }
}

// Initial table rendering with default status ('all')
updateTransactionTable("all");
