package patterns.builder;

/**
 * Created by Oleh on 10.11.2017.
 */
public class Image {
    private String path;
    private int height;
    private int width;
    private ProcessingType processingType;

    public void setPath(String path) {
        this.path = path;
    }

    public void setHeight(int height) {
        this.height = height;
    }

    public void setWidth(int width) {
        this.width = width;
    }

    public void setProcessingType(ProcessingType processingType) {
        this.processingType = processingType;
    }

    @Override
    public String toString() {
        return "Image{" +
                "path='" + path + '\'' +
                ", height=" + height +
                ", width=" + width +
                ", processingType=" + processingType +
                '}';
    }
}
