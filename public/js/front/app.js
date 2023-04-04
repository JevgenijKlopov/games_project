const app = (() => {

    const ajax = (url, callback, method = 'get', data = {}) => {
      console.log(url)
        const options = {
            method:method,
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'application/json'
            }
        }



        fetch(url, options)
            .then((response) => response.json)
            .then((result)=>{
                callback();
        })

    }
    const deleteRecord = () => {
        const deletes = document.querySelectorAll('.delete');
        deletes.forEach(function(value, key){
            value.addEventListener('click', function(event){
            event.preventDefault();

    const callback = () => {
      const deletable = event.target.dataset.deletable ?? 'tr';
        event.target.closest(deletable).remove();
    }
            ajax(event.target.href, callback, 'delete');
            });
        });
        
    }

const inputInit=()=>{
  bsCustomFileInput.init();
};


    return {
        init: () => {
            deleteRecord()
        },
    };

})();

app.init();