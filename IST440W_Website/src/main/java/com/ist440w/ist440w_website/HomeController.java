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

    @RequestMapping("/Contact_Us.html")
    public String contactus(){return "Contact_Us";}

    @RequestMapping("/Current_Pups.html")
    public String cur_pup(){return "Current_Pups";}

    @RequestMapping("/Old_Puppies.html")
    public String old_pup(){return "Old_Puppies";}

    @RequestMapping("/Parents.html")
    public String parents(){return "Parents";}

    @RequestMapping("/Testimonies.html")
    public String testimonies(){return "Testimonies";}
}
