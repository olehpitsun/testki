package patterns.composite;

/**
 * Created by Oleh on 11.11.2017.
 */
public class AutoImageProcessing {
    public static void main(String[] args) {
        Algorithm algorithm = new Algorithm();

        IAlgorithm filtration = new Filtration();
        IAlgorithm contrast = new Contrast();
        IAlgorithm segmentation = new Segmentation();

        algorithm.addStep(filtration);
        algorithm.addStep(contrast);
        algorithm.addStep(segmentation);

        algorithm.createAlgorithm();

    }
}
