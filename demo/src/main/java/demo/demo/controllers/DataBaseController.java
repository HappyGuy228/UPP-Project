package demo.demo.controllers;

import demo.demo.repository.ProductRepository;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
@RequestMapping("/cars")
public class DataBaseController {

    //private final ProductRepository productRepository;
    //private final CarsRepository carsRepository;
    private final ProductRepository productRepository;

    public DataBaseController(ProductRepository productRepository){
        this.productRepository = productRepository;
    }

    @GetMapping
    public ResponseEntity getAllCars(){
        return ResponseEntity.ok(productRepository.findAll());
    }

}
