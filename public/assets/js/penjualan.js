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
  let newValSpan = 0;
  if (tipe === "plus") {
    newValSpan = valSpan + 1;
    addListTransaksi(id, nama, newValSpan, harga);
  } else {
    newValSpan = valSpan - 1;
    if (newValSpan === 0 || newValSpan === -1) {
      newValSpan = 0;
      removeListTransaksi(id);
    }
  }
  span.data("counter", newValSpan);
  span.html(newValSpan);
}

function addListTransaksi(id, nama, jumlah, harga) {
  //   console.log(id, nama, harga);
  const intHarga = parseInt(harga.replace("Rp&nbsp;", "").replace(".", ""));
  const total = intHarga * jumlah;
  let data = {
    id: id,
    nama: nama,
    jumlah: jumlah,
    total: total,
  };
  if (list.length === 0) {
    list.push(data);
  } else {
    cekArray(id, data, jumlah, total);
  }

  function cekArray(id, data, jumlah, total) {
    if (!list.find(cekId(index, id))) {
      list.push(data);
    } else {
      list.find(replace);
    }

    function replace(index) {
      if (index.id == id) {
        index.jumlah = jumlah;
        index.total = total;
      }
    }
  }

  console.log(list);
  createList();
}

function cekId(index, id) {
  return index.id == id;
}

function removeListTransaksi(id) {
  list.find(remove);
  function remove(index) {
    if (index.id == id) list.splice(index, 1);
  }
  console.log(list);
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
}

function counter(id, tipeBtn) {
  const span = $(`span#${id}`);
  let valSpan = parseInt(span.data("counter"));
  let newValSpan = 0;
  if (tipeBtn === "plus") {
    newValSpan = valSpan + 1;
    addList(id);
  }
  if (tipeBtn === "minus") {
    newValSpan = valSpan - 1;
    if (newValSpan === 0 || newValSpan === -1) {
      newValSpan = 0;
      removeList(id);
    }
  }

  span.data("counter", newValSpan);
  span.html(newValSpan);
  createListBarang();
}

function removeList(id) {
  let index = list.indexOf(id);
  if (index != -1) {
    list.splice(index, 1);
  }
}

function addList(id) {
  // Tambah ID Ke Array Jika Belum Ada Data Yang Sama
  if (!list.find(cekDuplicatArray)) {
    list.push(id);
  }

  function cekDuplicatArray(i) {
    return i == id;
  }
}

function createListBarang() {
  const divListBarang = $("#listBarang");
  divListBarang.html("");
  // Membuat Daftar List Barang Di Card Transaksi
  list.map(create);

  function create(id) {
    const nama = $(`#namaBarang${id}`).html();
    const jumlah = parseInt($(`span#${id}`).data("counter"));
    const harga = $(`#hargaBarang${id}`).html();
    const valHargaBarang = parseInt(
      harga.replace("Rp&nbsp;", "").replace(".", "")
    );
    let totalHarga = jumlah * valHargaBarang;
    divListBarang.append(`
            <li class="list-group-item d-flex justify-content-between align-items-center">
                ${nama} (${jumlah})
            <span class="badge bg-primary harga" data-harga="${totalHarga}" >${totalHarga.toLocaleString(
      "id-ID",
      {
        style: "currency",
        currency: "IDR",
      }
    )}</span>
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
  // console.log(total)
  $("#total").html(
    totalBayar.toLocaleString("id-ID", {
      style: "currency",
      currency: "IDR",
    })
  );
  total = totalBayar;
  hitungBayar();
}

$("#uang").keyup(function (e) {
  hitungBayar();
});

function hitungBayar() {
  const kembalian = $("#kembalian");
  const uang = parseInt($("#uang").val());

  let hitung = uang - total;
  if (!hitung) hitung = 0;
  kembalian.html(
    hitung.toLocaleString("id-ID", {
      style: "currency",
      currency: "IDR",
    })
  );
}
$("#uang").mask("0000000000000000000000000000000");
