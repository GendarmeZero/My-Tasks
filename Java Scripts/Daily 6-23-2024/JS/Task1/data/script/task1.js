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
    constructor(make, model, battery_size) {
        super(make, model);
        this.battery_size = battery_size;
    }
    carBattery() {
        return `${this.carPrinter()} with a baterry of ${this.battery_size}`

    }
}
let bmw2024 = new ElectricCar('bmw', 'sport', 'large')
console.log(bmw2024.carBattery());

// Task 5

class bank {
    #_balance = 0;
    constructor(_balance) {
        this.#_balance = _balance;
    }
    deposit(amount) {
        if (amount > 0) {
            this.#_balance += amount;
        } else
            console.log('please depose more then $5');

    }
    withdraw(amount) {
        if (amount > 0 && amount <= this.#_balance) {
            this.#_balance -= amount;
        } else if (amount <= 0) {
            console.log('withdraw must be postivie ');
        } else {
            console.error("Insufficient funds");

        }
    }
    // getter 
    getBalance() {
        return this.#_balance;
    }
    setBalance(amount) {
        if (amount >= 0) {
            this.#_balance = amount;
        } else {
            console.error('ERROR')
        }
    }
}

const myAccount = new bank(100);
myAccount.deposit(50);
console.log(myAccount.getBalance());
myAccount.withdraw(30);
console.log(myAccount.getBalance());


// Task 6 
// Already done