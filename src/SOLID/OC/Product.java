package SOLID.OC;

/**
 * Created by Oleh on 12.11.2017.
 */
public class Product {

    private ILogger logger;

    public Product(ILogger logger) {
        this.logger = logger;
    }


    public void setPrice(double price){
        try {

        }catch (Exception e){
            this.logger.log(e.getMessage());
        }
    }
}
