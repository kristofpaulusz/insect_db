class InsectView {
    #insectTable;
    constructor(parent, array) {
        // console.log("View példányosítva");
        parent.html(`<table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Nomenc.</th>
            <th>Inserted by</th>
            <th>Extinct</th>
            <th>Control</th>
        </tr>
    </table>`)
        this.#insectTable = parent.children("table:last-child");
        this.fillTable(array);
}
    fillTable(array) {
        array.forEach(elem => {
            this.#insectTable.append(`<tr>
            <td>${elem.insect_id}</td>
            <td>${elem.name}</td>
            <td>${elem.nomenclature}</td>
            <td>${elem.inserted_by}</td>
            <td>${elem.extinct}</td>
            <td><button id=${"T"+elem.insect_id}>${"T"+elem.insect_id}</button></td>
        </tr>`)
        $("#T"+elem.insect_id).on("click", () => { this.buttonListener("deleteRow", elem)});
        
        });
    }
    buttonListener(eName, elem) {
        const myEvent = new CustomEvent(eName, {detail: elem.insect_id})
        window.dispatchEvent(myEvent);
    }
}
export default InsectView;