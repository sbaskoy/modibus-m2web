
class Column {
    name = null;
    visible = null;
    constructor(name, visible) {
        this.name = name;
        this.visible = visible;
    }
}

class Row {
    text=null;
    column:Column;
    constructor(text,column){
        
    }
}


class CustomTable {
    element=null;
    constructor(id,columns,rows){
        this.element=document.getElementById(id);
    }
}