package patterns.builder;

/**
 * Created by Oleh on 10.11.2017.
 */
public class ImageFiltrationBuilder extends ImageBuilder{

    @Override
    void buildPath() {
        image.setPath("C://img/filtr");
    }

    @Override
    void buildHeight() {
        image.setHeight(200);
    }

    @Override
    void buildWidth() {
        image.setWidth(300);
    }

    @Override
    void buildProcessingType() {
        image.setProcessingType(ProcessingType.FILTRATION);
    }
}
