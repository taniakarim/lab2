package classes;
import java.lang.*;
import java.util.Scanner;
public class Common
{
   private String name;
   private int userid;
   private String gender;
   private String email;
   private int phone;
   private String address;
    
   public Common()
   {

   }
   public void setName(Scanner )
   {
      System.out.print("Enter name: ");
      name=scan.scannextLine();
   }
   public void setUserid(Scanner scan)
   {
   	  System.out.print("Enter userid: ");
      userid=scan.nextInt();
      scan.nextLine();
   }
   public void setGender(Scanner scan)
   {
   	  System.out.print("Enter gender: ");
      gender=scan.nextLine();
   }
   public void setEmail(Scanner scan)
   {
   	  System.out.print("Enter email: ");
      email=scan.nextLine();
   }
   public void setPhone(Scanner scan)
   {
   	  System.out.print("Enter phone number: ");
      phone=scan.nextInt(); 
   }
   public void setAddress(Scanner scan)
   {
   	  scan.nextLine();
   	  System.out.print("Enter address: ");
      address=scan.nextLine();
   }
   public String getName()
   {
   	 return name;
   }
   public int getUserid()
   {
   	 return userid;
   }
   public String getGender()
   {
   	 return gender;
   }
   public String getEmail()
   {
   	 return email;
   }
   public int getPhone()
   {
   	 return phone;
   }
   public String getAddress()
   {
   	 return address;
   }
  
}