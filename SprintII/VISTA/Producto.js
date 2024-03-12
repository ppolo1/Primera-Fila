class Product {
    constructor(id, name, description, price) {
      this._id = id;
      this._name = name;
      this._description = description;
      this._price = price;
    }
  
    get id() {
      return this._id;
    }
  
    get name() {
      return this._name;
    }
  
    set name(value) {
      if (value.length < 3) {
        console.error('El nombre debe tener al menos 3 caracteres.');
      } else {
        this._name = value;
      }
    }
  
    get description() {
      return this._description;
    }
  
    set description(value) {
      this._description = value;
    }
  
    get price() {
      return this._price;
    }
  
    set price(value) {
      if (value < 0) {
        console.error('El precio no puede ser negativo.');
      } else {
        this._price = value;
      }
    }
  
  }
  