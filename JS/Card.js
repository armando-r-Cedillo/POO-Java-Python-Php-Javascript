class Card extends Payment{

    constructor(id, number, cvu, date){
        super(id);
        this.number = number;
        this.cvu = cvu;
        this.date = date;
    }
}