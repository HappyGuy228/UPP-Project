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

    @GetMapping("/registration/")
    public String registration(Model model){
        model.addAttribute("title","Registrtion");
        return "registration";
    }

    @GetMapping("/entrance")
    public String entrance(Model model){
        model.addAttribute("title","Entrance");
        return "entrance";
    }

    @GetMapping("/entrance1")
    public String entrance1(Model model){
        model.addAttribute("title","Entrance1");
        return "entrance1";
    }

    @GetMapping("/entrance_test")
    public String entrance_test(Model model){
        model.addAttribute("title","Entrance Test");
        return "entrance_test";
    }

    @GetMapping("/contact_information")
    public String contact_information(Model model){
        model.addAttribute("title","Contact information");
        return "contact_information";
    }

    @GetMapping("/contact_information1")
    public String contact_information1(Model model){
        model.addAttribute("title","contact information 1");
        return "contact_information1";
    }

    @GetMapping("/test")
    public String test(Model model){
        model.addAttribute("title","test");
        return "test";
    }

    @GetMapping("/header2")
    public String header2(Model model){
        model.addAttribute("title","header2");
        return "header2";
    }

    @RequestMapping(value = { "/", "/login1" })
    public String staticResource(Model model) {
        return "login1";
    }
}

