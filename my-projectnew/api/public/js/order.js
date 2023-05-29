// Simulasi data order
const orderData = {
  orderNo: "M 2653257",
  orderDate: "June 15, 2018",
  orderTotal: "$70.00",
  paymentMethod: "Check Payment",
};

// Menampilkan data order pada halaman
document.getElementById("order-number").textContent = orderData.orderNo;
document.getElementById("order-date").textContent = orderData.orderDate;
document.getElementById("order-total").textContent = orderData.orderTotal;
document.getElementById("payment-method").textContent = orderData.paymentMethod;
