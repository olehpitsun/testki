package patterns.composite;

/**
 * Created by Oleh on 11.11.2017.
 */
public class Contrast implements IAlgorithm {
    @Override
    public void applyAlgorithm() {
        System.out.println(" Контраст  ");
        //getContrast();
    }

    private double getContrast(){
        return 10.1;
    }
}
