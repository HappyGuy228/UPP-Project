package demo.demo.model;

import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

@Entity
public class Products {
    @Id
    @GeneratedValue(strategy = GenerationType.AUTO)
    //private Long id;

    private int car_id;
    private String car_brand;
    private String car_model;
    private String car_number;
    private String car_fuel;
    private String car_vin;

    public Products() {
    }

    public Products(int car_id, String car_brand, String car_model, String car_number, String car_fuel, String car_vin) {
        this.car_id = car_id;
        this.car_brand = car_brand;
        this.car_model = car_model;
        this.car_number = car_number;
        this.car_fuel = car_fuel;
        this.car_vin = car_vin;
    }

    public int getCar_id() {
        return car_id;
    }

    public void setCar_id(int car_id) {
        this.car_id = car_id;
    }

    public String getCar_brand() {
        return car_brand;
    }

    public void setCar_brand(String car_brand) {
        this.car_brand = car_brand;
    }

    public String getCar_model() {
        return car_model;
    }

    public void setCar_model(String car_model) {
        this.car_model = car_model;
    }

    public String getCar_number() {
        return car_number;
    }

    public void setCar_number(String car_number) {
        this.car_number = car_number;
    }

    public String getCar_fuel() {
        return car_fuel;
    }

    public void setCar_fuel(String car_fuel) {
        this.car_fuel = car_fuel;
    }

    public String getCar_vin() {
        return car_vin;
    }

    public void setCar_vin(String car_vin) {
        this.car_vin = car_vin;
    }
}