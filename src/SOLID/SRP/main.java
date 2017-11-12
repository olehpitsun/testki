package SOLID.SRP;

/**
 * Created by Oleh on 12.11.2017.
 */
public class main {
    public static void main(String[] args) {

        Logger logger = new Logger();
        Product product = new Product(logger);
        product.setPrice(100);
    }
}
