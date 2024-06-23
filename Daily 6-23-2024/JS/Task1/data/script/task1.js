// Task 1
class car {
    constructor(make, model) {
        this.make = make;
        this.model = model;
    }
    carPrinter() {
        console.log(`The car has started, ${this.make}`);
        
    };
}

let bmw = new car('bmw', 'sport')
console.log(bmw);

// Task 2
bmw.carPrinter();

// Task 3
// Already done

// Task 4
class ElectricCar extends car {
    constructor(make, model,battery_size) {
        super(make, model);
        this.battery_size = battery_size;
    }
    carBattery(){
        return `${this.carPrinter()} with a baterry of ${this.battery_size}`
        
    }
}
let bmw2024 = new ElectricCar('bmw', 'sport','large')
console.log(bmw2024.carBattery());

// Task 5



