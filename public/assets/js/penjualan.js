// OPERASIONAL TRANSAKSI
let list = [];
let total = 0;
$(".btn-counter").click(function (e) {
  e.preventDefault();
  const tipeBtn = $(this).data("tipebtn");
  const idBarang = $(this).data("idbarang");
  const namaBarang = $(`h5#namaBarang${idBarang}`).html();
  const hargaBarang = $(`span#hargaBarang${idBarang}`).html();
  // counter(idBarang, tipeBtn)
  newCounter(idBarang, tipeBtn, namaBarang, hargaBarang);
});

function newCounter(id, tipe, nama, harga) {
  const span = $(`span#${id}`);
  let valSpan = parseInt(span.data("counter"));
  const intHarga = parseInt(harga.replace("Rp&nbsp;", "").replaceAll(".", ""));
  let newValSpan = 0;
  let total = 0;
  if (tipe === "plus") {
    newValSpan = valSpan + 1;
    total = intHarga * newValSpan;
    addListTransaksi(id, nama, newValSpan, total);
  } else {
    newValSpan = valSpan - 1;
    if (newValSpan === 0 || newValSpan === -1) {
      newValSpan = 0;
      removeListTransaksi(id);
    } else {
      total = intHarga * newValSpan;
      updateListTransaksi(id, newValSpan, total);
    }
  }
  span.data("counter", newValSpan);
  span.html(newValSpan);
}

function addListTransaksi(id, nama, jumlah, total) {
  let data = {
    id: id,
    nama: nama,
    jumlah: jumlah,
    total: total,
  };
  if (list.length === 0) {
    list.push(data);
  } else {
    if (
      !list.find((index) => {
        return index.id == id;
      })
    ) {
      list.push(data);
    } else {
      updateListTransaksi(id, jumlah, total);
    }
  }

  createList();
}

function updateListTransaksi(id, jumlah, total) {
  list.find((index) => {
    if (index.id == id) {
      index.jumlah = jumlah;
      index.total = total;
    }
  });
  createList();
}

function removeListTransaksi(id) {
  list.splice(
    list.findIndex(({ id: elmId }) => elmId === id),
    1
  );
  createList();
}

function createList() {
  const divListBarang = $("#listBarang");
  divListBarang.html("");
  list.forEach(create);
  function create(index) {
    divListBarang.append(`
        <li class="list-group-item d-flex justify-content-between align-items-center">
            ${index.nama} ( ${index.jumlah} )
            <span class="badge bg-primary harga" data-harga="${
              index.total
            }" >${index.total.toLocaleString("id-ID", {
      style: "currency",
      currency: "IDR",
    })}</span>
        </li>
    `);
  }

  const listHarga = $(".harga");
  let totalBayar = 0;
  for (let index = 0; index < listHarga.length; index++) {
    const element = listHarga[index];
    let harga = element.dataset.harga;
    totalBayar = totalBayar + parseInt(harga);
  }
  $("#total").html(
    totalBayar.toLocaleString("id-ID", {
      style: "currency",
      currency: "IDR",
    })
  );
  total = totalBayar;
  hitungBayar();
}

$("#uang").mask("000.000.000.000.000.000", { reverse: true });

$("#uang").keyup(function (e) {
  hitungBayar();
});

function hitungBayar() {
  const kembalian = $("#kembalian");
  const uang = parseInt($("#uang").val().replaceAll(".", ""));

  let hitung = uang - total;
  if (!hitung) hitung = 0;
  kembalian.html(
    hitung.toLocaleString("id-ID", {
      style: "currency",
      currency: "IDR",
    })
  );
}
// END OPERASIONAL TRANSAKSI

// SEARCH PRODUCT
$("#searchProduct").keyup(function (e) {
  let val = this.value;
  let ele = $("h5.card-title");
  let card = $(".product");
  for (let index = 0; index < card.length; index++) {
    const element = card[index];
    const namaBarang = ele[index].innerText.toUpperCase();
    if (namaBarang.includes(val.toUpperCase())) {
      element.classList.remove("d-none");
    } else {
      element.classList.add("d-none");
    }
  }
});
// END SEARCH PRODUCT
