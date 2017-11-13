package SOLID.DI;

/**
 * Created by Oleh on 13.11.2017.
 */
public class SuperTransformer implements ICarTransformer, IPlaneTransformer {


    @Override
    public void toCar() {
        System.out.println("Авто");
    }

    @Override
    public void toPlane() {
        System.out.println("Літак");
    }


    public void toShip() {
        System.out.println("Корабель");
    }
}
