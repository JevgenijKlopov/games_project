import Swal from "sweetalert2";
import Toastr from "toastr";

const app =(() => {
    const ajax = (url, callback, method = 'get', data = {}) => {
        console.log(url)
        const options = {
            method: method,
            headers: {
                'X-CSRF-TOKEN': document.querySelector(
                    'meta[name="csrf-token"]'
                ).content,
                Accept: 'application/json',
                'Content-Type': 'application/json'
            }
        }

        fetch(url, options)
            .then(response => response.json())
            .then(result => {
                callback(result)
            })
    }
    const deleteRecord = () => {
        const deletes = document.querySelectorAll('.delete')
        deletes.forEach(function (value, key) {
            value.addEventListener('click', function (event) {
                event.preventDefault()
                const callback = result => {
                    console.log(result.data)
                    const deletable = event.target.dataset.deletable ?? 'tr'
                    event.target.closest(deletable).remove()

                    if (result.data.total) {
                        const priceInput =
                        document.querySelector('#price_total')
                        document.querySelector(
                            '#price_total'
                            ).innerText = `Total: ${result.data.total} Eur`
                            Toastr.success('Prekė pašalinta');
                    } else {
                        document.querySelector(
                            '#price_total'
                        ).innerText = `Total: 0 Eur`
                    }
                }
                ajax(event.target.href, callback, 'delete')
            })
        })
    }
    const addToCart = () => {
        const cart = document.querySelectorAll('.add')
        cart.forEach(function (value, key) {
            value.addEventListener('click', function (event) {
                event.preventDefault()
                const callback = result => {
                    console.log(result);
                    if (result.data.total) {

                        const priceInput =
                            document.querySelector('#price_total')
                        document.querySelector(
                            '#price_total'
                        ).innerText = `Total: ${result.data.total} Eur`
                    } else {
                        document.querySelector(
                            '#price_total'
                        ).innerText = `Total: 0 Eur`
                    }
                    if(result.data.game){
                    const holder = document.querySelector('#cart-holder');
                    const holderElement = document.createElement('ul');
                    holderElement.innerHTML = `<li class="dropdown-item">${result.data.game.title} - ${result.data.game.price/100} Eur <a href="http://games.test/user-card-destroy/${result.data.game.id}" type="button" data-deletable="li" class="btn btn-danger delete" onclick="event.preventDefault()">X</a> </li>`
                    holder.prepend(holderElement);
                    Toastr.success('Game Added');
                    deleteRecord();
                    }
                }
                console.log(event.target)
                ajax(event.target.href, callback, 'post')
            })
        })
    }

    const inputInit = () => {
        bsCustomFileInput.init()
    }

    return {
        init: () => {
            deleteRecord(),
            addToCart()
        }
    }
})()
export default app;