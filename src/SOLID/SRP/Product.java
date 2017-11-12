package SOLID.SRP;

/**
 * Created by Oleh on 12.11.2017.
 */
public class Product {

    private Logger logger;

    public Product(Logger logger) {
        this.logger = logger;
    }


    public void setPrice(double price){
        try {

        }catch (Exception e){
            this.logger.log(e.getMessage());
        }
    }
}
