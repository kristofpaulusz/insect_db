import InsectModel from "../model/InsectModel.js";
import InsectView from "../view/InsectView.js";
class InsectController {
    constructor() {
        console.log("Controller példányosítva");
        const insectModel = new InsectModel();
        insectModel.adatBe("/api/insect", this.readData)
    $(window).on("deleteRow", (event) => {
        insectModel.adatTorol("/api/insect/"+event.detail, this.readData);
        
    })    
    }
    readData(array) {
        const insectView = new InsectView($("#art"), array);
    }
    
}
export default InsectController;