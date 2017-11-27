package SOLID.OC;

/**
 * Created by Oleh on 12.11.2017.
 */
public class main {
    public static void main(String[] args) {

        ILogger logger = new FileLogger();
        Product product = new Product(logger);
        product.setPrice(100);
    }
}
