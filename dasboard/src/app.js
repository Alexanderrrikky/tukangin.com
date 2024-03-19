document.addEventListener('alpine:init', () => {
    Alpine.data('project', () => ({
        items: [
            { id: 1, name: 'Renopasi', img: '3.png', price: 20000 },
            { id: 2, name: 'Mural & Cat', img: '1.png', price: 25000 },
            { id: 3, name: 'Perbaikan Saluran air ', img: '2.png', price: 30000 },

        ],
    }));
    Alpine.store('cart', {
        items: [],
        total: 0,
        quantity: 0,
        add(newItem) {
            // cek apakah ada barang yang sama di dalam cart
            const cartIteme = this.items.find((item) => item.id === newItem.id);


            // jika belum ada /cart nya masih kosong

            if (!cartIteme) {
                this.items.push({ ...newItem, quantity: 1, total: newItem.price });
                this.quantity++;
                this.total += newItem.price;

            } else {
                // jika barang sudah ada, cek apakah baran berbeda atau sama dengan yang ada di cart
                this.items = this.items.map((item) => {
                    //jika barang tidak sama
                    if (item.id !== newItem.id) {
                        return item;
                    } else {
                        //  jika barang sudah ada maka tambah quantity dan total nya
                        item.quantity++;
                        item.total = item.price * item.quantity;
                        this.quantity++;
                        this.total += item.price;
                        return item;

                    }
                })
            }


        },
        remuve(id) {
            // ambil item yang mau di remuve berdasar kan id nya 
            const cartIteme = this.items.find((item) => item.id === id)

            // jika item lebih dari 1
            if (cartIteme.quantity > 1) {
                // telusuri 1 1
                this.items = this.items.map((item) => {
                    // jika bukan barang yang di celick
                    if (item.id !== id) {
                        return item;
                    } else {
                        item.quantity--;
                        item.total = item.price * item.quantity;
                        this.quantity--;
                        this.total -= item.price;
                        return item;
                    }
                });
            } else if (cartIteme.quantity === 1) {
                // jika barang sisa 1
                this.items = this.items.filter((item) => item.id !== id)
                this.quantity--;
                this.total -= cartIteme.price;
            }
        },
    });
});



// form validation
const checkoutButton = document.querySelector('.checkout-button');
checkoutButton.disabled = true;

const form = document.querySelector('#checkoutForm');

form.addEventListener('keyup', function () {
    for (let i = 0; i < form.elements.length; i++) {
        if (form.elements[i].value.length !== 0) {
            checkoutButton.classList.remove('disabled');
            checkoutButton.classList.add('disabled');
        } else {
            return false;
        }
    }
    checkoutButton.disabled = false;
    checkoutButton.classList.remove('disabled');
});

// kirim data ketika tombol checkout di celick

checkoutButton.addEventListener('click', function (e) {
    e.preventDefault();
    const formData = new FormData(form);
    const data = new URLSearchParams(formData);
    const objData = Object.fromEntries(data)
    const message = formatMessage(objData);
    window.open('https://wa.me/081346699080?text=' + encodeURIComponent(message))
});

// format pesan whatsapp

const formatMessage = (obj) => {
    return ` Data Customer
    Nama : ${obj.name}
    Email : ${obj.email}
    No Hp : ${obj.phone}

    Data Pesanan 
    ${JSON.parse(obj.items).map((item) => `${item.name} (${item.quantity}* ${rupiah(item.total)})\n`)}
    TOTAL : ${rupiah(obj.total)}
    TERIMA KASIH.`;

}



// kopresi uang rupiah
const rupiah = (Number) => {
    return new Intl.NumberFormat('id-ID', {
        style: 'currency',
        currency: 'IDR',
        minimumFractionDigits: 0
    }).format(Number);
}