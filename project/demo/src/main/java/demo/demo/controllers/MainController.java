package demo.demo.controllers;

import org.springframework.stereotype.Controller;
import org.springframework.ui.Model;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;


/*@Controller
public class MainController {
    @GetMapping("/")
    public String home(){
        return "home";
    }
}*/
@Controller
public class MainController {
    @GetMapping("/")
    public String home(Model model){
        model.addAttribute("title","Главная страница");
        return "home";
    }

    @GetMapping("/about")
    public String about(Model model){
        model.addAttribute("title","Страница про нас");
        return "about";
    }

    @RequestMapping(value = { "/", "/login1" })
    public String staticResource(Model model) {
        return "login1";
    }
}

