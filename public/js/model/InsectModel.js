class InsectModel {
    #adatokTomb = [];
    constructor() {
        console.log("Model példányosítva");
    }

    adatBe(vegpont, myCallBack) {
        
        fetch(vegpont, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json()).then((adat => {
                // console.log('Success:', adat);
                this.#adatokTomb = adat
                // console.log(this.#adatkTomb);
                myCallBack(this.#adatokTomb);
            }))
            .catch((error) => {
                console.error('Error:', error);
            })
            
    }
    adatTorol(vegpont, myCallBack) {
        
        fetch(vegpont, {
            method: 'DELETE',
            headers: {
                'Content-Type': 'application/json',
            }
        })
            .then((response) => response.json()).then((adat => {
                // console.log('Success:', adat);
                this.#adatokTomb = adat
                // console.log(this.#adatkTomb);
                myCallBack(this.#adatokTomb);
            }))
            .catch((error) => {
                console.error('Error:', error);
            })
    }
}
export default InsectModel;