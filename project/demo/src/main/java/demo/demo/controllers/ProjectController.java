package demo.demo.controllers;

import demo.demo.model.Products;
import demo.demo.repository.ProductRepository;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.jpa.repository.Query;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.PathVariable;

import java.util.ArrayList;
import java.util.List;
import java.util.Optional;

@Controller
public class ProjectController {

    @Autowired
    private ProductRepository productRepository;



    /*public static final String _query = "SELECT * where car_id = 2";
    @Query(value = _query, nativeQuery = true)*/




    @GetMapping("/blog")
    public String blogMain(Model model){
        //Iterable<Cars> cars = carsRepository.findAll();
        Iterable<Products> cars1 = productRepository.joinString();           // РАБОТАЕТ, НЕ ТРОГАТЬ
        //Optional<Cars> cars1 = carsRepository.joinString();
        model.addAttribute("cars", cars1);

        //model.addAttribute("cars", joinString());

        return "blog-main";
    }

    @GetMapping("/blog/{id}")
    public String blogDetails(@PathVariable(value = "id") int car_id, Model model){
        if(!productRepository.existsById(car_id)){
            return "redirect:/blog";
            //return "/blog";
        }

        //Optional<Cars> post = carsRepository.findById(car_id);
        //Iterable<Cars> post = carsRepository.joinString();        // РАБОТАЛО
        //Optional<Cars> post = carsRepository.joinString();
        Optional<Products> post = productRepository.customFindById(car_id);
        ArrayList<Products> res = new ArrayList<>();
        //res=car_id;
        post.ifPresent(res::add);
        model.addAttribute("post", res);
        //return "blog-details";
        return "blog-details";
    }
}
