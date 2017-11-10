package patterns.builder;

/**
 * Created by Oleh on 10.11.2017.
 */
public class SegmentationBuilder extends ImageBuilder{


    @Override
    void buildPath() {
        image.setPath("D://segmentation");
    }

    @Override
    void buildHeight() {
        image.setHeight(500);
    }

    @Override
    void buildWidth() {
        image.setWidth(500);
    }

    @Override
    void buildProcessingType() {
        image.setProcessingType(ProcessingType.SEGMENTATION);
    }
}
