package co.edureka.selenium.demo;

import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.chrome.ChromeDriver;

public class Test {

	public static void main(String[] args) throws InterruptedException {
		System.setProperty("webdriver.chrome.driver","C:\\Users\\Mugdho\\Downloads\\New folder\\chromedriver.exe");
      WebDriver driver= new ChromeDriver();
      driver.get("http://127.0.0.1:8000/loginpage");
      driver.manage().window().maximize();
      driver.findElement(By.id("inputEmail")).sendKeys("jahid.khandaker@northsouth.edu");
      String at = driver.getTitle();
      String et = "user_name";
      System.out.println(at);
      driver.findElement(By.id("inputPassword")).sendKeys("1122");
      String ate = driver.getTitle();
      String eta = "user_pass";
      //System.out.println(ate);
      driver.findElement(By.id("sub")).click();
      driver.close();
      
      if(at!=null && ate!=null) {
    	  System.out.println("Test Successful");
      }
      else {
    	  System.out.println("Test Failure");
      }
	}

}
