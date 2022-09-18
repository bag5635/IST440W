package com.ist440w.ist440w_website;

import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;

@Controller
public class HomeController {
    @GetMapping("/")
    public String index(){
        return "index";
    }

    @RequestMapping("/About_Us.html")
    public String aboutus() {
        return "About_Us";
    }
    @RequestMapping("/index.html")
    public String home() {
        return "index";
    }

}
